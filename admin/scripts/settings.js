
let general_data, contact_data;

let general_s_form = document.querySelector('.general_s_form');

let site_title_inp = document.getElementById('site_title_inp');
let site_about_inp = document.getElementById('site_about_inp');

let contact_s_form = document.querySelector('.contact_s_form');

let team_s_form = document.querySelector('.team_s_form');
let member_name_inp = document.getElementById('member_name_inp');
let member_picture_inp = document.getElementById('member_picture_inp');

function get_general()
{
    let site_title = document.getElementById('site_title');
    let site_about = document.getElementById('site_about');
    let shutdown_toggle = document.getElementById('shutdown-toggle');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        general_data = JSON.parse(this.responseText);

        site_title.innerText = general_data.site_title;
        site_about.innerText = general_data.site_about;

        site_title_inp.value = general_data.site_title;
        site_about_inp.value = general_data.site_about;

        if(general_data.shutdown == 0)
        {
            shutdown_toggle.checked = false;
            shutdown_toggle.value = 0;
        }
        else{
            shutdown_toggle.checked = true;
            shutdown_toggle.value = 1;
        }
    }

    xhr.send('get_general');
}

general_s_form.addEventListener('submit',function(e)
{
    e.preventDefault();
    upd_general(site_title_inp.value,site_about_inp.value);
});

function upd_general(site_title_val,site_about_val)
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function()
    {
        var myModal = document.getElementById('general-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if(this.responseText == 1){
            alert('error','No changes made!');
        
        }
        else
        {
            alert('success','Changes saved!');
            get_general();
        }
        
    }
    xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');
}

function upd_shutdown(val)
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function()
    {          
        if(this.responseText == 1 && general_data.shutdown==0){
            alert('success','Site has been shutdown!');
        }
        else
        {
            alert('success','Shutdown mode off');
            get_general();
        }
            
    }

    xhr.send('upd_shutdown='+val);
}

document.getElementById('shutdown-toggle').addEventListener('click', function()
{
    let val = this.checked ? 1 : 0;
    upd_shutdown(val);
});

function get_contacts()
{

    let contacts_p_id = ['address','gmap','pn1','pn2','email','fb','ig','twt'];
    let iframe = document.getElementById('iframe');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        contact_data = JSON.parse(this.responseText);
        contact_data = Object.values(contact_data);

        for(let i=0;i<contacts_p_id.length;i++){
            document.getElementById(contacts_p_id[i]).innerText = contact_data[i+1];
        }
        iframe.src = contact_data[9];
        contact_inp(contact_data);
    }
    xhr.send('get_contacts');
}

function contact_inp(data)
{
    let contact_inp_id = ['address_inp','gmap_inp','pn1_inp','pn2_inp','email_inp','fb_inp','ig_inp','twt_inp','iframe_inp'];

    for(let i = 0 ; i < contact_inp_id.length ; i++){
        document.getElementById(contact_inp_id[i]).value = data[i + 1];
    }
}

contact_s_form.addEventListener('submit',function(e)
{
    e.preventDefault();
    upd_contact();
});

function upd_contact() 
{
    let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'ig', 'twt', 'iframe'];
    let contact_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'ig_inp', 'twt_inp', 'iframe_inp'];

    let data_str = "";

    for (let i = 0; i < index.length; i++) {
        data_str += index[i] + "=" + document.getElementById(contact_inp_id[i]).value + '&';
    }

    data_str += "upd_contact";

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        var myModal = document.getElementById('contact-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 1) 
        {
            alert('error', 'No changes made!');
        } 
        else
        {
            alert('success', 'Changes saved!');
            get_contacts();
        }
        
    }

    xhr.send(data_str);
}

team_s_form.addEventListener('submit',function(e)
{
    e.preventDefault();
    add_member();
});

function add_member()
{
    let data = new FormData();
    data.append('name',member_name_inp.value);
    data.append('picture',member_picture_inp.files[0]);
    data.append('add_member','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php",true);

    xhr.onload = function()
    {
        var myModal = document.getElementById('team-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();
        
        if(this.responseText == 'inv_img'){
            alert('error','Only JPG and PNG images are allowed!');
        }
        else if(this.responseText == 'inv_size'){
            alert('error','Image should be less than 2MB!');
        }
        else if(this.responseText == 'upd_failed'){
            alert('error','Image upload failed. Server Down!');
        }
        else{
            alert('success','New member added!');
            member_name_inp.value='';
            member_picture_inp.value='';
            get_members();
        }
    }
    xhr.send(data);
}

function get_members()
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        document.getElementById('team-data').innerHTML = this.responseText;
    }

    xhr.send('get_members=');
}

function rem_member(val)
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        if(this.responseText==1){
            alert('success','Member Removed!');
            get_members();
        }
        else{
            alert('error','Server down! ');
        }
    }

    xhr.send('rem_member='+ val);
}

window.onload = function()
{
    get_general();
    get_contacts();
    get_members();
}


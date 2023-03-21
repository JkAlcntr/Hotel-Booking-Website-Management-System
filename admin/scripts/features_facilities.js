let feature_s_form = document.querySelector('.feature_s_form');
let facilities_s_form = document.querySelector('.facilities_s_form');
let addons_s_form = document.querySelector('.addons_s_form');

feature_s_form.addEventListener('submit',function(e)
{   
    e.preventDefault();
    add_feature();
});

function add_feature()
{
    let data = new FormData();
    data.append('name',feature_s_form.elements['feature_name'].value);
    data.append('add_feature','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_crud.php",true);

    xhr.onload = function()
    {
        var myModal = document.getElementById('feature-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();
        
        if(this.responseText == 1){
            alert('success','New feature added!');
            feature_s_form.elements['feature_name'].value='';
            get_feature();
        }
        else{
            alert('error','Server Down!');
        }
    }
    xhr.send(data);
}

function get_feature()
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        document.getElementById('feature-data').innerHTML = this.responseText;
    }

    xhr.send('get_feature=');
}

function rem_feature(val)
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        if(this.responseText==1){
            alert('success','Feature Removed!');
            get_feature();
        }
        else if(this.responseText == 'room_added'){
            alert('success','Feature is added to room!');                    
        } 
        else{
            alert('error','Server down! ');
        }
    }

    xhr.send('rem_feature='+ val);
}

facilities_s_form.addEventListener('submit',function(e)
{   
    e.preventDefault();
    add_facilities();
});

function add_facilities()
{
    let data = new FormData();
    data.append('picture',facilities_s_form.elements['facilities_picture'].files[0]);
    data.append('name',facilities_s_form.elements['facilities_name'].value);
    data.append('description',facilities_s_form.elements['facilities_desc'].value);
    data.append('add_facilities','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_crud.php",true);

    xhr.onload = function()
    {
        var myModal = document.getElementById('facilities-s');
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
            alert('success','New facility added!');
            facilities_s_form.reset();
            get_facilities();
        }
    }
    xhr.send(data);
}

function get_facilities()
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        document.getElementById('facilities-data').innerHTML = this.responseText;
    }

    xhr.send('get_facilities=');
}

function rem_facilities(val)
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        if(this.responseText==1){
            alert('success','Facility Removed!');
            get_facilities();
        }
        else if(this.responseText == 'room_added'){
            alert('success','Facility is added to room!');                    
        } 
        else{
            alert('error','Server down! ');
        }
    }

    xhr.send('rem_facilities='+ val);
}

addons_s_form.addEventListener('submit',function(e)
{   
    e.preventDefault();
    add_addons();
});

function add_addons()
{
    let data = new FormData();
    data.append('name',addons_s_form.elements['addons_name'].value);
    data.append('add_addons','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_crud.php",true);

    xhr.onload = function()
    {
        var myModal = document.getElementById('addons-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();
        
        if(this.responseText == 1){
            alert('success','New add-ons added!');
            addons_s_form.elements['addons_name'].value='';
            get_addons();
        }
        else{
            alert('error','Server Down!');
        }
    }
    xhr.send(data);
}

function get_addons()
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        document.getElementById('addons-data').innerHTML = this.responseText;
    }

    xhr.send('get_addons=');
}

function rem_addons(val)
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        if(this.responseText==1){
            alert('success','Add-ons Removed!');
            get_addons();
        }
        else if(this.responseText == 'addons_added'){
            alert('success','Add-ons is added!');                    
        } 
        else{
            alert('error','Server down! ');
        }
    }

    xhr.send('rem_addons='+ val);
}

window.onload = function()
{
    get_feature();
    get_facilities();
    get_addons();
}
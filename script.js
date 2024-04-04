function submitKyc(){
    // post data
    var full_name = document.getElementById('full_name').value;
    var email = document.getElementById('email').value;
    var contact = document.getElementById('contact').value;
    var address = document.getElementById('address').value;
    var password = document.getElementById('password').value;

    // creating XML object
    var xhr = new XMLHttpRequest();
    // formData object
    var data = new FormData();
    // appending post data to form data
    data.append('full_name', full_name);
    data.append('email', email);
    data.append('contact', contact);
    data.append('address', address);
    data.append('password', password);
    // directory of php file
    var url = "ajax_post.php";

    // sending request
    xhr.open('POST', url, true);

    // setting request header
    // xhr.setRequestHeader('Content-type', 'application/x-www-formencoded');

    xhr.onreadystatechange = function(){
        // checking readyState value and status
        // readyState values -> 0, 1, 2, 3, 4
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('message').textContent = this.responseText;
        }
    };
    // sending data
    xhr.send(data);
}
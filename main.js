const s = document.getElementById('submit');

s.addEventListener('click', (event) => {
  const file = document.querySelector('input[type=file]').files[0];
  const reader = new FileReader();
  
  reader.addEventListener("load", async function () {
    // convert image file to base64 string
    let myPromise = new Promise(function(myResolve, myReject) {
    console.log(reader.result);
    const data = reader.result;
    console.log(data);
    var xhr = new XMLHttpRequest();
      xhr.open("POST", 'http://localhost/base64/uploadImgToBase64/ins.php', true);
      xhr.setRequestHeader('Content-Type', 'application/json');
      xhr.send(JSON.stringify({  //? send JSON by POST method
          data: data    //! sinature data image/base64
    }));
    if (file) {
    reader.readAsDataURL(file);
    }
    });
    await window.location.href = "http://localhost/base64/uploadImgToBase64/aa.html";
  }, false);
  
  
  
  

});
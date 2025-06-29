  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyBJNeHO-MWUMyIGTARvNvrdYlp0YxX5W58",
    authDomain: "portfolio-35b0b.firebaseapp.com",
    databaseURL: "https://portfolio-35b0b-default-rtdb.firebaseio.com",
    projectId: "portfolio-35b0b",
    storageBucket: "portfolio-35b0b.firebasestorage.app",
    messagingSenderId: "59244967691",
    appId: "1:59244967691:web:0a4aa208276dd263ae140e"
  };

  //initialize firebase
  firebase.initializeApp(firebaseConfig);

  // reference your database
var contactFormDB = firebase.database().ref("portfolio");

document.getElementById("contactForm").addEventListener("submit", submitForm);


function submitForm(e) {
    e.preventDefault();
  
    var name = getElementVal("name");
    var emailid = getElementVal("email");
    var msgContent = getElementVal("message");
  
    saveMessages(name, emailid, msgContent);
  
  }
  
  const saveMessages = (name, emailid, msgContent) => {
    var newContactForm = contactFormDB.push();
  
    newContactForm.set({
      name: name,
      emailid: emailid,
      msgContent: msgContent,
    });
  };
  
  const getElementVal = (id) => {
    return document.getElementById(id).value;
  };
  
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.0.2/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.0.2/firebase-analytics.js";
  import { getAuth } from "https://www.gstatic.com/firebasejs/9.0.2/firebase-auth.js"
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCljusNToNz5kbQHoeOyYkieB4IdMVgrlY",
    authDomain: "sports-92.firebaseapp.com",
    projectId: "sports-92",
    storageBucket: "sports-92.appspot.com",
    messagingSenderId: "693670324075",
    appId: "1:693670324075:web:8eb71b2b891264a2954e2e",
    measurementId: "G-6ZBQRLTG8Q"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  let uiConfig = {
    callbacks: {
      signInSuccessWithAuthResult: function () {
        console.log("ログイン成功")
        return true;
      },
    },
    signInOptions: [
      firebase.auth.GoogleAuthProvider.PROVIDER_ID,
    ],
    signInSuccessUrl: "../html/login.php",
  };
  const user = firebase.auth().currentUser;
  firebase.auth().onAuthStateChanged((user) => {
    if (user) {
      const useremail = user.providerData[0].email;
      // console.log(useremail);
      $.ajax({
        type: "POST",
        url: "../backend/request.php",
        data: {'gmail':useremail},
        dataType: "json",
        scriptCharset: 'utf-8'
      })
        .then(
          function (param) {　 //　paramに処理後のデータが入って戻ってくる
            // console.log(param); //　帰ってきたら実行する処理
            if(param!=true){
              firebase.auth().signOut();
            }
          },
          function (XMLHttpRequest, textStatus, errorThrown) { //　エラーが起きた時はこちらが実行される
            console.log(XMLHttpRequest); //　エラー内容表示
          });
    }
  });


  let ui = new firebaseui.auth.AuthUI(firebase.auth());
  ui.start('#logincontainer', uiConfig);
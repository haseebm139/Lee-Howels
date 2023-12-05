/*
Give the service worker access to Firebase Messaging.
Note that you can only use Firebase Messaging here, other Firebase libraries are not available in the service worker.
*/
importScripts("https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js");
importScripts(
    "https://www.gstatic.com/firebasejs/7.23.0/firebase-messaging.js"
);

/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
* New configuration for app@pulseservice.com
*/
firebase.initializeApp({
    apiKey: "AIzaSyChiQJD1jN3i_ptzs2ahvyqCKzlOyvVvTU",
    authDomain: "slashpoint-ad2c4.firebaseapp.com",
    projectId: "slashpoint-ad2c4",
    storageBucket: "slashpoint-ad2c4.appspot.com",
    messagingSenderId: "126847266254",
    appId: "1:126847266254:web:a26b2f61a8186488140f9f",
    measurementId: "G-3R7S2ZV7RZ",
});

/*
Retrieve an instance of Firebase Messaging so that it can handle background messages.
*/
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function (payload) {
    console.log(
        "[firebase-messaging-sw.js] Received background message ",
        payload
    );
    /* Customize notification here */
    const notificationTitle = "Background Message Title";
    const notificationOptions = {
        body: "Background Message body.",
        icon: "/itwonders-web-logo.png",
    };

    return self.registration.showNotification(
        notificationTitle,
        notificationOptions
    );
});

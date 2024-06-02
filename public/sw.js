// // Register event listener for the 'push' event.
// self.addEventListener('push', function (event) {
//     // Retrieve the textual payload from event.data (a PushMessageData object).
//     // Other formats are supported (ArrayBuffer, Blob, JSON), check out the documentation
//     // on https://developer.mozilla.org/en-US/docs/Web/API/PushMessageData.
//     const payload = event.data ? event.data.text() : 'no payload';

//     // Keep the service worker alive until the notification is created.
//     event.waitUntil(
//         // Show a notification with title 'ServiceWorker Cookbook' and use the payload
//         // as the body.
//         self.registration.showNotification('ServiceWorker Cookbook', {
//             body: payload,
//         })
//     );
// });


// console.log("Service Worker Loaded...");

// self.addEventListener("push", e => {
//   const data = e.data.json();
//   console.log("Push Recieved...");
//   self.registration.showNotification(data.title, {
//     body: "Notified by Traversy Media!",
//     icon: "http://image.ibb.co/frYOFd/tmlogo.png"
//   });
// });



self.addEventListener("push", (event) => {
    if (!(self.Notification && self.Notification.permission === 'granted')) {
        //notifications aren't supported or permission not granted!
        return;
    }
    const data = event.data.json();
    const title = data.title;
    const body = data.body;
    const icon = data.icon;
    const url = data.data.url;
    console.log(data);

    const notificationOptions = {
        body: body,
        tag: "unique-tag", // Use a unique tag to prevent duplicate notifications
        icon: icon,
        data: {
            url: "localhost:8000", // Replace with the desired URL for redirecting user to the desired page
        },
    };
    event.waitUntil(
        self.registration.showNotification(title, notificationOptions)
    )
});


// importScripts(
//   "https://www.gstatic.com/firebasejs/10.0.0/firebase-app-compat.js"
// );
// importScripts(
//   "https://www.gstatic.com/firebasejs/10.0.0/firebase-messaging-compat.js"
// );

// firebase.initializeApp({
//   apiKey: "BObMUzAKDHbo2-DYrKk0hImZzFZbO3ZP1DISq1oj-BGCqi8HXfeAnVWb13jMrHEdIfye96fuj8fGxZ9jnhddMbk",
//   authDomain: "localhost:8000",
//   projectId: "vigilant-guru-356106",
//   storageBucket: "your_storage_bucket",
//   messagingSenderId: "507355988437",
//   appId: "1:507355988437:web:abef86ea42b0bde8c37d5c",
// });

// const messaging = firebase.messaging();

// messaging.onBackgroundMessage(({ notification }) => {
//   console.log("[firebase-messaging-sw.js] Received background message ");
//   // Customize notification here
//   const notificationTitle = notification.title;
//   const notificationOptions = {
//       body: notification.body,
//   };

//   if (notification.icon) {
//       notificationOptions.icon = notification.icon;
//   }

//   self.registration.showNotification(notificationTitle, notificationOptions);
// });
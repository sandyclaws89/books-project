require('./bootstrap');
import 'bootstrap';

let adminView = document.getElementById('admin-view').addEventListener("click", displayDate);
let adminTab = document.getElementById('admin-tab');
adminTab.style.display = "none";
adminView.addEventListener("click", function(){
    if(adminTab.style.display == "none"){
        adminTab.style.display = "block";
        // my_toggle_button[i].innerHTML = "- show less";
        //my_toggle_array[i] = 1;
      } else {
            adminTab.style.display = "none";
            // my_toggle_button[i].innerHTML = "+ show more";
          //my_toggle_array[i] = 0;
      }
      console.log(adminTab)
});

// var my_toggle = document.getElementsByClassName('my_toggle');
// var my_toggle_button = document.getElementsByClassName('my_toggle_button');
// var my_toggle_array = [];
// var i;
// for(i = 0; i < my_toggle.length; i++){
//     //my_toggle_array.push(0);
//     my_toggle[i].style.display = "none";
//     my_toggle_button[i].addEventListener("click", function(){
//         if(my_toggle[i].style.display == "none" /* || my_toggle_array[i] == 0 */){
//           my_toggle[i].style.display = "block";
//           my_toggle_button[i].innerHTML = "- show less";
//           //my_toggle_array[i] = 1;
//         } else {
//             my_toggle[i].style.display = "none";
//             my_toggle_button[i].innerHTML = "+ show more";
//             //my_toggle_array[i] = 0;
//         }
//     });
// }


// function adminPanel() {
//   const adminView = document.getElementById('admin-view');
//   adminView.toggleAttribute('hidden');
// }

// const chapters = document.querySelectorAll('details');
// chapters.forEach((chapter) => {
//   chapter.addEventListener('toggle', logItem);
// });

// function logItem(e) {
//     const item = document.querySelector(`[data-id=${e.target.id}]`);
//     item.toggleAttribute('hidden');
//   }

//   const chaptersex = document.querySelectorAll('details');
//   chapters.forEach((chapter) => {
//     chapter.addEventListener('toggle', logItem);
//   });

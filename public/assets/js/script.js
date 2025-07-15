// (function(){
//     emailjs.init("QpSbC1_YkQycQKqV2");
// })();

// const contactform = document.getElementById('contactForm');
// const succesMessage = document.getElementById('succes-message');

// contactForm .addEventListener('submit', function(event){
//     event.preventDefault();

//     const formData = {
//         to_name: "admin",
//         form_name: document.getElementById('name').value,
//         from_email: document.getElementById('email').value,
//         message: document.getElementById('message').value,
//         reply_to: document.getElementById('email').value,
//      };

//      emailjs.send('service_hyv4qma','template_94purgh', formData).then(function(response){
//         succesMessage.classList.remove('hidden');

//         contantForm.reset();

//         setTimeout() => {
//             succesMessage.classList.add('hidden');
//         } 5000);
//      }) .catch(function(error){
//         alert('Gagal Mengirim Pesan, Silahkan coba lagi.');
//     });

/*=========================
function
==========================*/
const adComplain = (modalName, complain) => {
    complain.value = modalName.querySelector('.form-control').value;
    const btn = complain.parentNode.querySelector('.prescription-btn');
    if (complain.innerText) {
        btn.innerText = btn.innerText.replace('Add', 'Edit');
    } else {
        btn.innerText = btn.innerText.replace('Edit', 'Add');
    }
    $(modalName).modal('hide');
}
/*=========================
Event
==========================*/
$('#previewBtn').click(function (e) {
    $('.btn').toggle();
    $('.select-hospital').toggle();
    $(this).show();
});
$('#chief form').submit((e) => {
    e.preventDefault();
    const modal = document.querySelector('#chief');
    const complain = document.querySelector('.cc .complain');
    adComplain(modal, complain);
});
$('#exam form').submit((e) => {
    e.preventDefault();
    const modal = document.querySelector('#exam');
    const complain = document.querySelector('.oe .complain');
    adComplain(modal, complain);
});
$('#advice form').submit((e) => {
    e.preventDefault();
    const modal = document.querySelector('#advice');
    const complain = document.querySelector('.advice  .complain');  
    adComplain(modal, complain);
});

// $('#drug form').submit((e) => {
//     e.preventDefault();
//     const name = $('.drug-name input').val();
//     const time = $('.drug-time input').val();
//     const timeQty = $('.drug-time input').val().split('').filter(x => x != '+').map(Number).reduce((a, b) => a + b, 0);
//     const meal = $('.drug-meal-time select').val();
//     const dayQty = $('.drug-duration input').val();
//     const duration = $('.drug-duration select').val();
//     drugList.innerHTML += `
//     <li>

//         <div class="d-flex justify-content-between">
//             <div class="align-self-center">
//                      <input type="text" value="${name}" readonly class="drugName"> 
                     
//             </div>
//             <div class="align-self-center">
//                 <button type="button" class="btn btn-sm p-o edit-drug" data-bs-toggle="modal"
//                 data-bs-target="#prescriptionModal" id="drugBtn">
//                   <i class="bi bi-pencil-square text-primary"></i>
//                 </button>
//             </div>
//         </div>
//         <P class="qty">${time} [ ${dayQty} ${duration}] ${meal} (Qty. ${timeQty*dayQty})</P>
//     </li>
//     `;
//     $('#drug').modal('hide');
//     $('.drug-name input').val('');
// });

// drug update function
$('#prescriptionModal form').submit((e) => {
    e.preventDefault();
    const name = $('.drug-name input').val();
    const time = $('.drug-time input').val();
    const timeQty = $('.drug-time input').val().split('').filter(x => x != '+').map(Number).reduce((a, b) => a + b, 0);
    const meal = $('.drug-meal-time select').val();
    const dayQty = $('.drug-duration input').val();
    const duration = $('.drug-duration select').val();
    drugList.innerHTML = `
    <li>

        <div class="d-flex justify-content-between">
            <div class="align-self-center">
                     <input type="text" value="${name}" readonly class="drugName"> 
                     
            </div>
            <div class="align-self-center">
                <button type="button" class="btn btn-sm p-o edit-drug" data-bs-toggle="modal"
                data-bs-target="#prescriptionModal" id="drugBtn">
                  <i class="bi bi-pencil-square text-primary"></i>
                </button>
            </div>
        </div>
        <P class="qty">${time} [ ${dayQty} ${duration}] ${meal} (Qty. ${timeQty*dayQty})</P>
    </li>
    `;
    $('#drug').modal('hide');
    $('.drug-name input').val('');
});
/*=========================
Initial
==========================*/
const drugList = document.querySelector('.drug-list ol');



 
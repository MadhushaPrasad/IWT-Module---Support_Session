// function displayChangeSelectedValue() {
//     const selectedValue = document.getElementById('Vehicles').value;
//
//     if (selectedValue === '01') {
//         document.getElementById('display').innerHTML = 'You have selected a car';
//     } else {
//         document.getElementById('display').innerHTML = "You haven't selected a car";
//     }
// }

function displayChangeSelectedValue() {
    const selectedValue = document.getElementById('Vehicles').value;

    if (selectedValue === '01') {
        document.getElementById('display').innerHTML = 'You have selected a car';
    } else if (selectedValue === '02') {
        document.getElementById('display').innerHTML = 'You have selected a Van';
    } else if (selectedValue === '03') {
        document.getElementById('display').innerHTML = 'You have selected a Bus';
    } else {
        document.getElementById('display').innerHTML = "You haven't selected a car";
    }
}
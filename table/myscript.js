var clickCount = 1;
var series = 1;
const name = ["gautam", "jay", "Meet", "jeet", "ani"];
const email = ["gautam@gmail.com", "jay@gmail.com", "Meet@gmail.com", "jeet@gmail.com", "ani@gmail.com"];
var c = 0;


function add_row() {
  var table = document.getElementById("mytable");
  var newRow = table.insertRow(-1); // Add row at the last position

  var cell1 = newRow.insertCell(0);
  var cell2 = newRow.insertCell(1);
  var cell3 = newRow.insertCell(2);
  var cell4 = newRow.insertCell(3);

  cell1.innerHTML = clickCount++;
  cell1.innerHTML = series++;
  cell2.innerHTML = name[c];
  cell3.innerHTML = email[c];

  c++;
  if (c >= name.length) {
    c = 0;
  }

  cell4.innerHTML = "<button type=\"button\" id=\"delet_row\" class=\"delete\" onclick=\"delete_row(this)\">Delete</button>";

  updateButtonState();
}

function delete_row(button) {
  var row = button.parentNode.parentNode;
  row.parentNode.removeChild(row);
  clickCount--;
  updateButtonState();
}

function updateButtonState() {

  var addButton = document.getElementById("add_row");

  if (clickCount >= 11) {
    addButton.disabled = true;
    document.getElementById('error').innerHTML = "*You have the limit of records.";
  } else {
    document.getElementById('error').innerHTML = "";
    addButton.disabled = false;
  }


}

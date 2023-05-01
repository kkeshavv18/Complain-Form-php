var view = document.getElementById("view-data");
const viewAllData = () => {
  view.style.display = "none";
  let idField = document.getElementById("searchId");
  let nameField = document.getElementById("searchName");
  if (idField.value || nameField.value != "") {
    window.location.reload();
  }
};

// Search by First Name
const searchById = () => {
  let searchValue = document.getElementById("searchId").value;
  let table = document.getElementById("myTable");
  let tr = table.getElementsByTagName("tr");
  for (var i = 0; i < tr.length; i++) {
    let td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      let childId = td.textContent || td.innerHTML;
      if (childId.indexOf(searchValue) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
  view.style.display = "block";
};
// Search by Child Name
const searchByName = () => {
  let searchValue = document.getElementById("searchName").value.toUpperCase();
  let table = document.getElementById("myTable");
  let tr = table.getElementsByTagName("tr");
  for (var i = 0; i < tr.length; i++) {
    let td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      let textValue = td.textContent || td.innerHTML;
      if (textValue.toUpperCase().indexOf(searchValue) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
  view.style.display = "block";
};

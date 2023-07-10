function myFunction() {
  // Declare variables
  var input, filter, section, div, a, i, txtValue;
  input = document.getElementById('searchdata');
  filter = input.value.toUpperCase();
  section = document.getElementById("myUL");
  div = section.getElementsByTagName('div');

  // Loop through all divst items, and hide those who don't match the search query
  for (i = 0; i < div.length; i++) {
    a = div[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      div[i].style.display = "";
    } else {
      div[i].style.display = "none";
    }
  }
}
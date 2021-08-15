function myFunction()
{
  document.getElementById("myDropdown").classList.toggle("show");
}
function filterfunction()
{
  input,fil,div,a,i,ul,li;
  input=document.getElementById("myInput");
  fil=input.value.toUppercase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
<div class="content">

  <input type="text" placeholder="Search your home.." onkeyup="filterFunction()" class="searchterm">
  <selct><input type="checkbox" name="c1">All Resendtial
        <option value="resendtial apartment">resendtial apartment</option>
        <option value="builder floor">Builder floor</option>
        <option value="tenament">tenament</option>
        <option value="Studio apartment">Studio apartment</option>
        <option value="Farm house">Farm house</option>

        <input type="checkbox" name="c2">All Commercial
        <option value="Commercial shops">Commercial Shps</option>
        <option value="Commercial Showrooms">Commercial Showrooms</option>
        <option value="office">office</option>
        <option value="commercial land">commercial land</option>
        <option value="hotel">hotel</option>
        <option value="Guest House">Guest House</option>
</selct>

  <button onclick="myFunction()">Search</button>
</input>
</div>
</div>

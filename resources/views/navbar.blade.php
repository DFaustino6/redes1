<aside class="menu" >
  <p class="menu-label is-size-5">
    <strong>All Chapters</strong>&nbsp;<i class="fal fa-project-diagram"></i>
  </p>
  <ul class="menu-list is-size-5" id="myDIV">
    @foreach($chapters as $chapter)
      <li><a href="{{action('Redes@index',$chapter->id)}}">{{$chapter->name}}</a></li>
    @endforeach
  </ul>
</aside>
<script>
  // Add active class to the current button (highlight it)
  var header = document.getElementById("myDIV");
  var btns = header.getElementsByClassName("");
  for (var i = 0; i < count($chapters); i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("is-active");
    current[0].className = current[0].className.replace(" is-active", "");
    this.className += " is-active";
    });
  }
</script>

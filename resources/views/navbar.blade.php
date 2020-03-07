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

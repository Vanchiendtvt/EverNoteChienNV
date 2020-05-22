<nav id="sidebar" class="sidebar-wrapper">
  <div class="sidebar-content">
    <div class="sidebar-brand">
      <a href="/">EverNote</a>
     
    </div>
    <div class="sidebar-search">
      <div>
        <div class="input-group">
          <input type="text" class="form-control search-menu" placeholder="Search...">
          <div class="input-group-append">
            <span class="input-group-text">
              <i class="fa fa-search" aria-hidden="true"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- sidebar-search  -->
    <div class="sidebar-menu">
      <ul>
        <li class="header-menu">
          <span>General</span>
        </li>
        <li class="sidebar">
        <a href="{{route('EverNote.create')}}">
            <i class="fas fa-plus"></i>
            <span>New</span>
          </a>
         
        </li>
        <li class="sidebar">
        <a href="{{ Route('EverNote.index') }}">
            <i class="far fa-sticky-note"></i>
            <span>All Notes</span>
          </a>
         
        </li>
        <li class="sidebar">
          <a href="#">
            <i class="fas fa-book"></i>
            <span>NoteBooks</span>
          </a>
         
        </li>
        <li class="sidebar">
          <a href="#">
            <i class="fas fa-share-alt"></i>
            <span>Share With me</span>
          </a>
         
        </li>
        <li class="sidebar">
          <a href="#">
            <i class="fas fa-trash"></i>
            <span>Trash</span>
          </a>
          
        </li>
    
      </ul>
    </div>
    <!-- sidebar-menu  -->
  </div>
</nav>
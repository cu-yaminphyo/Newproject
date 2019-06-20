
<nav class="navbar navbar-expand-lg bg-light">
  
    <a class="navbar-brand" href="{{url('main')}}" id="navbarDropdown">ပင်မစာမျက်နှာ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item dropdown">
          <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              မြန်မာဇာတ်ကားများစုစည်းမှု
          </a>
        
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="navitem">
            <a class="dropdown-item" href="{{url('action')}}" >အကြမ်းဇာတ်လမ်းများ</a>
            <a class="dropdown-item" href="{{url('drama')}}"> အချစ်ဇာတ်လမ်းများ</a>
            <a class="dropdown-item" href="{{url('funny')}}">ဟာသဇာတ်လမ်းများ</a>
            <a class="dropdown-item" href="{{url('ghost')}}">ကြောက်မက်ဖွယ်ရာဇာတ်လမ်းများ</a>
          </div>
        </li>
        <a class="navbar-brand" href="{{url('about')}}" id="navbarDropdown">ပင်မစာမျက်နှာ</a>
            </ul>
      <form autocomplete="off" method="GET"  action="/search">
        <div class="autocomplete" style="width:300px;height:50px">
        <input  type="text" placeholder="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </div>
      </form>
    
    </div>
  
  </nav>
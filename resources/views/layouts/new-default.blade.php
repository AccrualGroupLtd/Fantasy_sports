<!DOCTYPE html>
<html lang="en">

<head>
  @include('includes.head')
  <style>
    .season_fall{
      padding: 0px;
    }
    .header{
      background-color: #000;
padding: 10px;
    }
    .header h3{
      color: #fff;
      font-weight: 700;
    }
    .header .headerRight{
      text-align: end;
display: flex;
justify-content: flex-end;
align-items: center;
height: 100%;
    }
    .header .headerRight span{
      margin: 0px 20px;
    }
    .header .headerRight span a{
      color: #fff;
      font-size: 20px;
      font-weight: 700;
      cursor: pointer;
    }
  </style>
</head>
@php
$style="display:none";
if(request()->route()->getPrefix()=="/league")
{
$style="display:show";
}
@endphp

<body class="season_fall loginView">
  <div class="overlay"></div>
  <div class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <h3>THE <br> OFFSEASON <br> GM</h3>
        </div>
        <div class="col-lg-6">
          <div class="headerRight">
          <span><a href="/leagueComming">CREATE LEAGUE DRAFT BOARD</a></span>
          <span><a href="/leagueView">LEAGUE PREVIEW</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div>
    <div class="ajax-loader">
      <img src="{{ asset('images/ajax-loader.gif') }}" class="img-responsive" />
    </div>
    @yield('content')
  </div>
  <div class="copy-right text-center" style="position: fixed;bottom: 0px;text-align: center !important;left: 40%;">
    <p style="color: #fff;">Copyright @ 2021 Website Name. All rights reserved</p>
  </div>
  @include('includes.scripts')
  @yield('js')
  <script>
    $(document).ready(function() {
      if ($('#draftMode').is(':checked')) {
        $(".dropDownDiv").css("display", "block")
      } else {
        $(".dropDownDiv").css("display", "none")
      }
    });
    $(document).ready(function() {
      $('.draftPlayer').click(function() {
        $('.draftPlayer').select2('open');
      });
      // set time out 2 sec
      setTimeout(function() {
        $('.draftPlayer').trigger('click');
      }, 50);
    });
  </script>
</body>

</html>
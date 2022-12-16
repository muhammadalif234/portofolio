<!DOCTYPE html>
<html lang="en">
<head>
  @include('datafrontend.headstyle')
</head>
<body>
  @include('datafrontend.navigasi')
  @include('datafrontend.jumbotron')
  @include('datafrontend.membacabuku')
@include('datafrontend.artikel')
<section id="main-kolaborasi">
   
    <div class="contianer py-5">
        <h2 class="text-center main-judul">didukung oleh</h2>
        
             <div class="text-center py-3">
                <a href=""><img src="{{asset("/images/kemendikbud.png")}}"></a>
                <a href=""><img src="{{asset("/images/kominfo.png")}}"></a>
                <a href=""><img src="{{asset("/images/riset.png")}}"></a>
                <a href=""><img src="{{asset("/images/ut.jpg")}}"></a>
             </div>
    </div>
</section>



    </section>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0d6efd" fill-opacity="1" d="M0,128L26.7,133.3C53.3,139,107,149,160,170.7C213.3,192,267,224,320,245.3C373.3,267,427,277,480,240C533.3,203,587,117,640,101.3C693.3,85,747,139,800,181.3C853.3,224,907,256,960,245.3C1013.3,235,1067,181,1120,181.3C1173.3,181,1227,235,1280,229.3C1333.3,224,1387,160,1413,128L1440,96L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
      </svg>


    <script src="{{asset("js/main.js")}}"></script>
    <script src="{{asset("js/jquery-3.6.0.min.js")}}"></script>
    <script src="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js")}}"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html> 
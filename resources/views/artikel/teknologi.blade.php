<html>
    <head>
        @include('datafrontend.headstyle')
    </head>
    <body>
    <div>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-primary">
            <div class="container">
              <div class="navbar-brand text-white" href="www.google.com"><img src="{{asset("/images/buku3.png")}}" style="max-width:7%;">lembaran kertas 21</div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto py-1">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Fitur</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">layanan</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      information
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="{{asset("/contact")}}">contact</a></li>
                      <li><a class="dropdown-item" href="#">galery</a></li>
                      <li><a class="dropdown-item" href="#">profile</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <div>
        <section id="upgrade" class="grey d-blox">
            <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 px-3py-5">
                  
                   <h2>apa itu bahasa pemograman</h2>
                   <p>Bahasa pemrograman adalah bahasa yang digunakan oleh para pemrogram untuk menulis kode komputer. Setiap bahasa pemrograman memiliki aturan sintaks dan semantik yang berbeda-beda,
                     yang menentukan cara menulis kode yang benar dan dapat dipahami oleh komputer.
                   </p>
                   <p>Bahasa pemrograman dibagi menjadi beberapa jenis, seperti bahasa tingkat tinggi dan bahasa tingkat rendah. Bahasa tingkat tinggi lebih mudah dipahami oleh manusia dan biasanya digunakan untuk menulis kode dalam aplikasi yang kompleks. Sedangkan bahasa tingkat rendah lebih dekat dengan bahasa mesin dan digunakan untuk menulis kode dasar yang dapat dieksekusi oleh komputer.

                    Beberapa contoh bahasa pemrograman tingkat tinggi yang populer adalah Python, Java, C++, dan JavaScript. Sedangkan bahasa pemrograman tingkat rendah yang biasa digunakan adalah assembly dan bahasa mesin.
                    
                    Memahami bahasa pemrograman merupakan suatu kemampuan yang sangat penting bagi para pemrogram. Mereka harus dapat memahami sintaks, semantik, dan cara kerja setiap bahasa pemrograman yang dipakai dalam proyek yang sedang dikerjakan. Selain itu, para pemrogram juga harus terus belajar
                    dan mengembangkan kemampuan mereka dalam bahasa pemrograman untuk dapat menciptakan perangkat lunak yang lebih baik dan berguna.
                   </p>
                   <a href="{{url("/teknologi")}}" class="btn btn-primary">pelajari sekarang</a>
          
                </div>
                <div class="col-lg-6 ">
                  <div ><img src="{{asset("/images/programer.png")}}" style="max-width: 70%">
                  </div></div>
                
               
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card">
                    <img src="{{("/images/programphp.png")}}" class="card-img-top"style="max-width:200px;" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">program php</h5>
                      <p class="card-text">PHP adalah bahasa pemrograman umum yang berarti php dapat disematkan ke dalam kode HTML,
                         atau dapat digunakan dalam kombinasi dengan berbagai sistem templat web, sistem manajemen konten web, dan kerangka kerja web.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{("/images/programcss.png")}}" class="card-img-top"style="max-width:200px;" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">program css</h5>
                      <p class="card-text">CSS adalah bahasa Cascading Style Sheet dan biasanya digunakan untuk mengatur tampilan elemen yang tertulis dalam bahasa markup
                        , seperti HTML. CSS berfungsi untuk memisahkan konten dari tampilan visualnya di situs.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{("/images/programc.png")}}" class="card-img-top"style="max-width:200px;"alt="...">
                    <div class="card-body">
                      <h5 class="card-title">programc#</h5>
                      <p class="card-text">C# atau yang sering disebut dengan Csharp merupakan bahasa pemrograman yang berbasis Object dimana bahasa pemrograman ini 
                        dikembangkan dan didukung oleh pihak Micrososft dimana bahasa pemrograman ini mendukung platform Microsoft.NET Framework.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{("/images/programpy.png")}}" style="max-width:200px;"class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">program py</h5>
                      <p class="card-text">Python adalah bahasa pemrograman tingkat tinggi yang populer dan banyak digunakan oleh para pemrogram. Python memiliki sintaks yang mudah dipahami dan menggunakan konsep pemrograman berorientasi objek.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center bg-primary">
                      <h1>tes file</h1>
            </div>

          </section>
    </div>
    </body>
</html>
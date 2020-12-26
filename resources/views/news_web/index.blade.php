<!DOCTYPE html>
<html lang="en">
   <head>
      <title>News</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/latest_news.css">
      <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <div id="app">
      @include('news_web.header')
         <section>
            <div class="container-fluid">
               <div class="row justify-content-center">
                  <div class="col-md-8 text-center">
                     <div class="breaking-flash">
                        <a href="">
                        <img src="assets/img/news-image.jpg" class="w-100">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="newsSection">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="latest_newsarea">
                     <span>Latest News</span>
                     <ul id="ticker01" class="news_sticker">
                        <li><a href="single_news.php"><img src="assets/img/news-image.jpg" alt="">My First News Item</a></li>
                        <li><a href="single_news.php"><img src="assets/img/news-image.jpg" alt="">My Second News Item</a></li>
                        <li><a href="single_news.php"><img src="assets/img/news-image.jpg" alt="">My Third News Item</a></li>
                        <li><a href="single_news.php"><img src="assets/img/news-image.jpg" alt="">My Four News Item</a></li>
                        <li><a href="single_news.php"><img src="assets/img/news-image.jpg" alt="">My Five News Item</a></li>
                        <li><a href="single_news.php"><img src="assets/img/news-image.jpg" alt="">My Six News Item</a></li>
                        <li><a href="single_news.php"><img src="assets/img/news-image.jpg" alt="">My Seven News Item</a></li>
                        <li><a href="single_news.php"><img src="assets/img/news-image.jpg" alt="">My Eight News Item</a></li>
                        <li><a href="single_news.php"><img src="assets/img/news-image.jpg" alt="">My Nine News Item</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-3">
                     <div class="">
                        <div class="corona-chart">
                           <div class="chart-india">
                              <h3>कोरोना ट्रैकर (भारत)</h3>
                              <ul>
                                 <li>
                                    <div class="chart-title">Confirmed</div>
                                    <div class="chart-val-confirm">9,857,029</div>
                                 </li>
                                 <li>
                                    <div class="chart-title">Recovered</div>
                                    <div class="chart-val-recover">9,357,464</div>
                                 </li>
                                 <li>
                                    <div class="chart-title">Death</div>
                                    <div class="chart-val">143,019</div>
                                 </li>
                              </ul>
                           </div>
                           <div class="chart-world">
                              <h3>कोरोना ट्रैकर (विश्व)</h3>
                              <ul>
                                 <li>
                                    <div class="chart-title">Confirmed</div>
                                    <div class="chart-val-confirm">71,698,043</div>
                                 </li>
                                 <li>
                                    <div class="chart-title">Recovered</div>
                                    <div class="chart-val-recover">46,855,056</div>
                                 </li>
                                 <li>
                                    <div class="chart-title">Death</div>
                                    <div class="chart-val">1,604,928</div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="right_ad">
                           <img src="assets/img/ad.gif" class="w-100">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="full_box_news">
                              <a href="single_news.php">
                                 <img src="assets/img/news-image1.webp" class="w-100">
                                 <h4>10 मई कोरोना वायरस अपडेट : जानिए चंद मिनटों में कोरोना वायरस से जुड़ी हर खबर</h4>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="half_news">
                              <a href="single_news.php">
                                 <img src="assets/img/news-image1.webp" class="w-100">
                                 <p>10 मई कोरोना वायरस अपडेट : जानिए चंद मिनटों में कोरोना वायरस से जुड़ी हर खबर</p>
                              </a>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="half_news">
                              <a href="single_news.php">
                                 <img src="assets/img/news-image1.webp" class="w-100">
                                 <p>10 मई कोरोना वायरस अपडेट : जानिए चंद मिनटों में कोरोना वायरस से जुड़ी हर खबर</p>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="">
                        <div class="right_ad">
                           <img src="assets/img/ad1.gif" class="w-100">
                        </div>
                        <div class="right_ad">
                           <img src="assets/img/ad2.gif" class="w-100">
                        </div>
                        <div class="right_ad">
                           <img src="assets/img/ad1.gif" class="w-100">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="section-top-space">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-3">
                     <div id="sidebar" class="top_stories">
                        <h4 class="heading">प्रमुख समाचार</h4>
                        <div class="row">
                           <div class="col-md-12">
                              <a href="single_news.php" class="news-box-link">
                                 <div class="row side-blog">
                                    <div class="col-4 pl-0">
                                       <img src="assets/img/news-image.jpg" class="w-100">
                                    </div>
                                    <div class="col-8 side-blog-content px-0">
                                       <h6>दिल्ली पुलिस क्राइम ब्रांच ने की बड़ी कार्रवाई, 700 जमातियों के जब्त किए पासपोर्ट</h6>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <a href="single_news.php" class="news-box-link">
                                 <div class="row side-blog">
                                    <div class="col-4 pl-0">
                                       <img src="assets/img/news-image.jpg" class="w-100">
                                    </div>
                                    <div class="col-8 side-blog-content px-0">
                                       <h6>दिल्ली पुलिस क्राइम ब्रांच ने की बड़ी कार्रवाई, 700 जमातियों के जब्त किए पासपोर्ट</h6>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <a href="single_news.php" class="news-box-link">
                                 <div class="row side-blog">
                                    <div class="col-4 pl-0">
                                       <img src="assets/img/news-image.jpg" class="w-100">
                                    </div>
                                    <div class="col-8 side-blog-content px-0">
                                       <h6>दिल्ली पुलिस क्राइम ब्रांच ने की बड़ी कार्रवाई, 700 जमातियों के जब्त किए पासपोर्ट</h6>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <a href="single_news.php" class="news-box-link">
                                 <div class="row side-blog">
                                    <div class="col-4 pl-0">
                                       <img src="assets/img/news-image.jpg" class="w-100">
                                    </div>
                                    <div class="col-8 side-blog-content px-0">
                                       <h6>दिल्ली पुलिस क्राइम ब्रांच ने की बड़ी कार्रवाई, 700 जमातियों के जब्त किए पासपोर्ट</h6>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <a href="single_news.php" class="news-box-link">
                                 <div class="row side-blog">
                                    <div class="col-4 pl-0">
                                       <img src="assets/img/news-image.jpg" class="w-100">
                                    </div>
                                    <div class="col-8 side-blog-content px-0">
                                       <h6>दिल्ली पुलिस क्राइम ब्रांच ने की बड़ी कार्रवाई, 700 जमातियों के जब्त किए पासपोर्ट</h6>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <a href="single_news.php" class="news-box-link">
                                 <div class="row side-blog">
                                    <div class="col-4 pl-0">
                                       <img src="assets/img/news-image.jpg" class="w-100">
                                    </div>
                                    <div class="col-8 side-blog-content px-0">
                                       <h6>दिल्ली पुलिस क्राइम ब्रांच ने की बड़ी कार्रवाई, 700 जमातियों के जब्त किए पासपोर्ट</h6>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <a href="single_news.php" class="news-box-link">
                                 <div class="row side-blog">
                                    <div class="col-4 pl-0">
                                       <img src="assets/img/news-image.jpg" class="w-100">
                                    </div>
                                    <div class="col-8 side-blog-content px-0">
                                       <h6>दिल्ली पुलिस क्राइम ब्रांच ने की बड़ी कार्रवाई, 700 जमातियों के जब्त किए पासपोर्ट</h6>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="ribbons-wrapper">
                          <div class="ribbon">
                            <span class="ribbon5">देश विदेश</span>
                              <div class="row cat-box">
                                <div class="col-md-5 pd-l-cat-4 cat-left">
                                  <a href="single_news.php" class="news-box-link">
                                    <h4>10 मई कोरोना वायरस अपडेट : जानिए चंद मिनटों में कोरोना वायरस से जुड़ी हर खबर </h4>
                                  </a>
                                  <img src="assets/img/news-image.jpg" class="w-100">
                                </div>
                                <div class="col-md-7 pd-cat-4">
                                  <div class="cat-wise-box">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="assets/img/news-image.jpg" class="w-100">
                                      </div>
                                      <div class="col-8 pl-0">
                                        <a href="single_news.php" class="news-box-link">
                                          <h4>10 मई कोरोना वायरस अपडेट : जानिए चंद मिनटों में कोरोना वायरस से जुड़ी हर खबर</h4>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="cat-wise-box">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="assets/img/news-image.jpg" class="w-100">
                                      </div>
                                      <div class="col-8 pl-0">
                                        <a href="single_news.php" class="news-box-link">
                                          <h4>10 मई कोरोना वायरस अपडेट : जानिए चंद मिनटों में कोरोना वायरस से जुड़ी हर खबर</h4>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="cat-wise-box">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="assets/img/news-image.jpg" class="w-100">
                                      </div>
                                      <div class="col-8 pl-0">
                                        <a href="single_news.php" class="news-box-link">
                                          <h4>10 मई कोरोना वायरस अपडेट : जानिए चंद मिनटों में कोरोना वायरस से जुड़ी हर खबर</h4>
                                        </a>
                                      </div>
                                    </div>
                                  </div>                                 
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="ribbons-wrapper">
                          <div class="ribbon">
                            <span class="ribbon5">देश विदेश</span>
                              <div class="row cat-box">
                                <div class="col-md-5 pd-l-cat-4 cat-left">
                                  <a href="single_news.php" class="news-box-link">
                                    <h4>10 मई कोरोना वायरस अपडेट : जानिए चंद मिनटों में कोरोना वायरस से जुड़ी हर खबर </h4>
                                  </a>
                                  <img src="assets/img/news-image.jpg" class="w-100">
                                </div>
                                <div class="col-md-7 pd-cat-4">
                                  <div class="cat-wise-box">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="assets/img/news-image.jpg" class="w-100">
                                      </div>
                                      <div class="col-8 pl-0">
                                        <a href="single_news.php" class="news-box-link">
                                          <h4>10 मई कोरोना वायरस अपडेट : जानिए चंद मिनटों में कोरोना वायरस से जुड़ी हर खबर</h4>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="cat-wise-box">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="assets/img/news-image.jpg" class="w-100">
                                      </div>
                                      <div class="col-8 pl-0">
                                        <a href="single_news.php" class="news-box-link">
                                          <h4>10 मई कोरोना वायरस अपडेट : जानिए चंद मिनटों में कोरोना वायरस से जुड़ी हर खबर</h4>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="cat-wise-box">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="assets/img/news-image.jpg" class="w-100">
                                      </div>
                                      <div class="col-8 pl-0">
                                        <a href="single_news.php" class="news-box-link">
                                          <h4>10 मई कोरोना वायरस अपडेट : जानिए चंद मिनटों में कोरोना वायरस से जुड़ी हर खबर</h4>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="widget-container live-update">
                        <div class="live-update-heading">
                           <h2>लाइव अपडेट</h2>
                        </div>
                        <div class="live-update-container">
                           <div class="content" id="scrollbar">
                              <ul>
                                 <li data-tb-region-item="">
                                    <a title="दिल्ली: हरियाणा के किसान संगठन प्रतिनिधि आज कृषि मंत्री नरेंद्र सिंह तोमर से करेंगे मुलाकात" href="single_news.php">
                                       <div class="live-list-group">
                                          <h4>10:54 AM</h4>
                                          <p>दिल्ली: हरियाणा के किसान संगठन प्रतिनिधि आज कृषि मंत्री नरेंद्र सिंह तोमर से करेंगे मुलाकात</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li data-tb-region-item="">
                                    <a title="कोलकाता: जानवरों की तस्करी का मामला, CBI ने 4 BSF अधिकारियों को समन भेजा" href="single_news.php">
                                       <div class="live-list-group">
                                          <h4>10:30 AM</h4>
                                          <p>कोलकाता: जानवरों की तस्करी का मामला, CBI ने 4 BSF अधिकारियों को समन भेजा</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li data-tb-region-item="">
                                    <a title="CM अरविंद केजरीवाल का ट्वीट: उपवास पवित्र होता है, आप जहां हैं, वहीं हमारे किसान भाइयों के लिए उपवास करें" href="single_news.php">
                                       <div class="live-list-group">
                                          <h4>10:15 AM</h4>
                                          <p>CM अरविंद केजरीवाल का ट्वीट: उपवास पवित्र होता है, आप जहां हैं, वहीं हमारे किसान भाइयों के लिए उपवास करें</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li data-tb-region-item="">
                                    <a title="कोरोना अपडेट: 24 घंटे में कोरोना के 27,071 नए केस, 336 लोगों की मौत " href="single_news.php">
                                       <div class="live-list-group">
                                          <h4>9:44 AM</h4>
                                          <p>कोरोना अपडेट: 24 घंटे में कोरोना के 27,071 नए केस, 336 लोगों की मौत </p>
                                       </div>
                                    </a>
                                 </li>
                                 <li data-tb-region-item="">
                                    <a title="नई दिल्ली: CM केजरीवाल के उपवास पर प्रकाश जावड़ेकर का तंज- 'ये आपका पाखण्ड है'" href="single_news.php">
                                       <div class="live-list-group">
                                          <h4>9:25 AM</h4>
                                          <p>नई दिल्ली: CM केजरीवाल के उपवास पर प्रकाश जावड़ेकर का तंज- 'ये आपका पाखण्ड है'</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li data-tb-region-item="">
                                    <a title="चेन्नई: IIT मद्रास में 71 लोग कोरोना पॉजिटिव, लैब, लाइब्रेरी बंद किया गया" href="single_news.php">
                                       <div class="live-list-group">
                                          <h4>9:02 AM</h4>
                                          <p>चेन्नई: IIT मद्रास में 71 लोग कोरोना पॉजिटिव, लैब, लाइब्रेरी बंद किया गया</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li data-tb-region-item="">
                                    <a title="सुकमा: IED ब्लास्ट में घायल अधिकारी की इलाज के दौरान मौत, डिफ्यूज करने के दौरान हुए थे जख्मी" href="single_news.php">
                                       <div class="live-list-group">
                                          <h4>8:35 AM</h4>
                                          <p>सुकमा: IED ब्लास्ट में घायल अधिकारी की इलाज के दौरान मौत, डिफ्यूज करने के दौरान हुए थे जख्मी</p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <div class="subscribe_form">

                      <p>DAILY<br><span>NEWSLETTER</span></p>
                      <h6>Get our best delivered directly to your inbox</h6>
                      <form>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <button type="submit" class="btn">Subscribe</button>
                      </form>
                     </div>

                  </div>
               </div>
            </div>
      </section>
      <section class="section-top-space">
         <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <div class="news_outer">
                    <a href="https://www.youtube.com/embed/rtkLHNmMalQ" target="_blank">
                    <iframe class="news_video" src="https://www.youtube.com/embed/rtkLHNmMalQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>Modi govt will never take anti-farmer decisions: Rajnath Singh</p>
                  </a>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="news_outer">
                    <a href="https://www.youtube.com/embed/rtkLHNmMalQ" target="_blank">
                    <iframe class="news_video" src="https://www.youtube.com/embed/rtkLHNmMalQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>Modi govt will never take anti-farmer decisions: Rajnath Singh</p>
                  </a>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="news_outer">
                    <a href="https://www.youtube.com/embed/rtkLHNmMalQ" target="_blank">
                    <iframe class="news_video" src="https://www.youtube.com/embed/rtkLHNmMalQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>Modi govt will never take anti-farmer decisions: Rajnath Singh</p>
                  </a>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
         </div>
      </section>
      </div>

      @include('news_web.footer')
      
   </body>
</html>
<?php
class CarouselClass
{
    public function __construct()
    {

    }

    public function getImgByDate()
    {
         $now = (new DateTime('now'))->format('Y-m-d H:i:s'); 
        //$now =(new DateTime("2013-04-15"))->format('Y-m-d H:i:s');
        $currentDate = date("m",strtotime($now));
      
        $output ="";
       
        switch ($currentDate) {
            case "01":
              $output .="<img src='img/rsz_winter_english-min.png'  class='banner-img'
                       alt='Winter img...'>";
              break;
            case "02":
              $output .="<img src='img/rsz_valentinesday_english-min.png'  class='banner-img'
                   alt='Valentines day img...'>";
              break;
            case "03":
              $output .="<img src='img/rsz_march_english-min.png'  class='banner-img'
                   alt='March img...'>";
              break;
              case "04":
                $output .="<img src='img/easter_english-min.png'  class='banner-img'
                     alt='Easter image...'>";
                break;
                case "05":
                    $output .="<img src='img/rsz_may_english-min.png'  class='banner-img'
                         alt='May image... '>";
                    break;
                case "06":
                    $output .="<img src='img/rsz_june_english-min.png'  class='banner-img'
                            alt='June image...'>";
                    break;
                case "07":
                    $output .="<img src='img/rsz_july_english-min.png'  class='banner-img'
                            alt='July image...'>";
                break;
                case "08":
                    $output .="<img src='img/rsz_august_english-min.png'  class='banner-img'
                         alt='August image...'>";
                break;
                case "09":
                    $output .="<img src='img/rsz_september_english-min.png'  class='banner-img'
                         alt='September image...'>";
                break;
                case "10":
                    $output .="<img src='img/rsz_october_english-min.png'  class='banner-img'
                         alt='October image...'>";
                break;
                case "11":
                    $output .="<img src='img/rsz_november_english-min.png'  class='banner-img'
                         alt='November image...'>";
                break;
                case "12":
                    $output .="<img src='img/rsz_christmas_blue_english_english-min.png'  class='banner-img'
                         alt='Christmas image...'>";
                break;
            default:
           
            $output .="<img src='img/rsz_sale_english-min.png'  class='banner-img'
                 alt='Sale...'>";
          }

          return $output;
    }

    public function showCarousel(){
        
        $output="";
        
        $output .= " <div class='carousel'>";
         $output .=" <div class='carousel-item fade '>";
         $output .="<picture class='carousel-banner-box'>";
        $output .= $this->getImgByDate();
        $output .="</picture>";
         $output .="<div class='carousel-caption'>
                   <h1>Welcome to HandmadeMarket</h1>
                  </div>";
        $output .="</div>";
        $output .=" <div class='carousel-item fade'>
                        <picture class='carousel-banner-box'>
                            <img src='img/rsz_fashion_english-min.png'  class='banner-img'
                            alt='Fashion image...
                            '>
                        </picture>
                        
                    </div>";
        $output .=" <div class='carousel-item fade'>
                    <picture class='carousel-banner-box'>
                        <img src='img/rsz_jewelry_english-min.png'  class='banner-img'
                        alt='Jewelry image...
                        '>
                    </picture>
                   
                </div>";
        $output .=" <div class='carousel-item fade'>
                <picture class='carousel-banner-box'>
                    <img src='img/rsz_beauty_english-min.png'  class='banner-img'
                    alt='Beauty image...
                    '>
                </picture>
                
            </div>";
        $output .=" <div class='carousel-item fade'>
                        <picture class='carousel-banner-box'>
                            <img src='img/rsz_toys_english-min.png'  class='banner-img'
                            alt='Toys image...
                            '>
                        </picture>
                        
                </div>";
       
        $output .= "</div>";

        return $output;
    }
}
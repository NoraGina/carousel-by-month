<?php
class CarouselClass
{
    public function __construct()
    {

    }

    public function getImgByDate()
    {
        // $now = (new DateTime('now'))->format('Y-m-d H:i:s'); 
        $now =(new DateTime("2013-04-15"))->format('Y-m-d H:i:s');
        $currentDate = date("m",strtotime($now));
        
        $output ="";
        switch ($currentDate) {
            case "01":
              $output .="<picture class='carousel-banner-box'>
                      <img src='img/rsz_winter_english-min.png'  class='banner-img'
                       alt='Winter img...
                       '>
                  </picture>
                  <div class='carousel-caption'>
                      <h1>Bine ai venit la piața HandMadeMarket</h1>
                      </div>";
              break;
            case "02":
              $output .="<picture class='carousel-banner-box'>
                  <img src='img/rsz_valentinesday_english-min.png'  class='banner-img'
                   alt='Valentines day img...
                   '>
              </picture>
              <div class='carousel-caption'>
                  <h1>Bine ai venit la piața HandMadeMarket</h1>
              </div>";
              break;
            case "03":
              $output .="<picture class='carousel-banner-box'>
                  <img src='img/rsz_march_english-min.png'  class='banner-img'
                   alt='March img...
                   '>
              </picture>
              <div class='carousel-caption'>
                  <h1>Bine ai venit la piața HandMadeMarket</h1>
              </div>";
              break;
              case "04":
                $output .="<picture class='carousel-banner-box'>
                    <img src='img/easter_english-min.png'  class='banner-img'
                     alt='Easter image...
                     '>
                </picture>
                <div class='carousel-caption'>
                    <h1>Bine ai venit la piața HandMadeMarket</h1>
                </div>";
                break;
                case "05":
                    $output .="<picture class='carousel-banner-box'>
                        <img src='img/rsz_may_english-min.png'  class='banner-img'
                         alt='May image...
                         '>
                    </picture>
                    <div class='carousel-caption'>
                        <h1>Bine ai venit la piața HandMadeMarket</h1>
                    </div>";
                    break;
                case "06":
                    $output .="<picture class='carousel-banner-box'>
                        <img src='img/rsz_june_english-min.png'  class='banner-img'
                            alt='June image...
                            '>
                    </picture>
                    <div class='carousel-caption'>
                        <h1>Bine ai venit la piața HandMadeMarket</h1>
                    </div>";
                    break;
                case "07":
                    $output .="<picture class='carousel-banner-box'>
                        <img src='img/rsz_july_english-min.png'  class='banner-img'
                            alt='July image...
                            '>
                    </picture>
                    <div class='carousel-caption'>
                        <h1>Bine ai venit la piața HandMadeMarket</h1>
                    </div>";
                break;
                case "08":
                    $output .="<picture class='carousel-banner-box'>
                        <img src='img/rsz_august_english-min.png'  class='banner-img'
                         alt='August image...
                         '>
                    </picture>
                    <div class='carousel-caption'>
                        <h1>Bine ai venit la piața HandMadeMarket</h1>
                    </div>";
                break;
                case "09":
                    $output .="<picture class='carousel-banner-box'>
                        <img src='img/rsz_september_english-min.png'  class='banner-img'
                         alt='September image...
                         '>
                    </picture>
                    <div class='carousel-caption'>
                        <h1>Bine ai venit la piața HandMadeMarket</h1>
                    </div>";
                break;
                case "10":
                    $output .="<picture class='carousel-banner-box'>
                        <img src='img/rsz_october_english-min.png'  class='banner-img'
                         alt='October image...
                         '>
                    </picture>
                    <div class='carousel-caption'>
                        <h1>Bine ai venit la piața HandMadeMarket</h1>
                    </div>";
                break;
                case "011":
                    $output .="<picture class='carousel-banner-box'>
                        <img src='img/rsz_november_english-min.png'  class='banner-img'
                         alt='November image...
                         '>
                    </picture>
                    <div class='carousel-caption'>
                        <h1>Bine ai venit la piața HandMadeMarket</h1>
                    </div>";
                break;
                case "05":
                    $output .="<picture class='carousel-banner-box'>
                        <img src='img/rsz_christmas_blue_english_english-min.png'  class='banner-img'
                         alt='Christmas image...
                         '>
                    </picture>
                    <div class='carousel-caption'>
                        <h1>Bine ai venit la piața HandMadeMarket</h1>
                    </div>";
                break;
            default:
           
            $output .="<div class='carousel-banner-box'>
                <img src='img/rsz_sale_english-min.png'  class='banner-img'
                 alt='Sale...
                 '>
            </div>
            <div class='carousel-caption'>
                <h1>Bine ai venit la piața HandMadeMarket</h1>
            </div>";
          }

          return $output;
    }

    public function showCarousel(){
        $output="";
        $output .= " <div class='slideshow-container'>";
        $output .=" <div class='carousel-item fade'>";
        $output .= $this->getImgByDate();
        $output .="</div>";
        $output .=" <div class='carousel-item fade'>
                        <picture class='carousel-banner-box'>
                            <img src='img/rsz_fashion_english-min.png'  class='banner-img'
                            alt='Fashion image...
                            '>
                        </picture>
                        <div class='carousel-caption'>
                            <h1>Bine ai venit la piața HandMadeMarket</h1>
                        </div>
                    </div>";
        $output .=" <div class='carousel-item fade'>
                    <picture class='carousel-banner-box'>
                        <img src='img/rsz_jewelry_english-min.png'  class='banner-img'
                        alt='Jewelry image...
                        '>
                    </picture>
                    <div class='carousel-caption'>
                        <h1>Bine ai venit la piața HandMadeMarket</h1>
                    </picture>
                </div>";
        $output .=" <div class='carousel-item fade'>
                <picture class='carousel-banner-box'>
                    <img src='img/rsz_beauty_english-min.png'  class='banner-img'
                    alt='Beauty image...
                    '>
                </picture>
                <div class='carousel-caption'>
                    <h1>Bine ai venit la piața HandMadeMarket</h1>
                </div>
            </div>";
        $output .=" <div class='carousel-item fade'>
                        <picture class='carousel-banner-box'>
                            <img src='img/rsz_toys_english-min.png'  class='banner-img'
                            alt='Toys image...
                            '>
                        </picture>
                        <div class='carousel-caption'>
                            <h1>Bine ai venit la piața HandMadeMarket</h1>
                        </div>
                </div>";

        $output .= "</div>";

        return $output;
    }
}
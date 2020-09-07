<?php

namespace FYKOS\dokuwiki\template\Jumbotron;

require_once(dirname(__FILE__) . '/JumbotronData.php');
require_once(dirname(__FILE__) . '/JumbotronGroup.php');
require_once(dirname(__FILE__) . '/JumbotronItem.php');

use FYKOS\dokuwiki\template\NavBar\BootstrapNavBar;

class Jumbotron {

    private string $pageId;

    public function __construct(string $pageId) {
        $this->pageId = $pageId;
    }

    public function render(BootstrapNavBar $secondMenu): string {
        $stream = $this->getStreamByPage();
        $jumbotronData = new JumbotronData();
        $item = $jumbotronData->getJumbotronDataByPage($this->pageId)->getRandom();
        $html = '';
        if ($stream) {
            $html .= '<div class="container-fluid header-image jumbotron">';
            $html .= $this->printCarouselContainer($stream);
            $html .= $this->printSecondMenuContainer($secondMenu);
            $html .= '</div>';
        } elseif ($item) {
            $html .= '<div class="container-fluid header-image jumbotron">';
            $html .= $this->printJumbotronContainer($item);
            $html .= $this->printSecondMenuContainer($secondMenu);
            $html .= '</div>';
        } else {
            $html .= '<div class="container-fluid header mb-3">';
            $html .= $this->printSecondMenuContainer($secondMenu);
            $html .= '</div>';
        }
        return $html;
    }

    private function printSecondMenuContainer(BootstrapNavBar $secondMenu): string {
        $html = '<div class="row nav-container hidden-md-down second-nav">';
        $html .= $secondMenu->render();
        $html .= '</div>';
        return $html;
    }

    private function printCarouselContainer(string $stream): string {
        $html = '<div class="carousel-container">';
        $html .= p_render('xhtml', p_get_instructions('{{news-carousel>stream="' . $stream . '"}}'), $info);
        $html .= '</div>';
        return $html;
    }

    private function printJumbotronContainer(JumbotronItem $item): string {
        $html = '<div class="row jumbotron-background" data-background="' . $item->getOuterContainerBackgroundId() . '">';

        if ($item->getHeadline() || $item->getText()) {
            $html .= '<div class="offset-lg-1 col-lg-8 offset-xl-3 col-xl-5">';
            $html .= '<div class="jumbotron-inner-container"
                             data-background="' . $item->getInnerContainerBackgroundId() . '">';
            $html .= '<h1>' . $item->getHeadline() . '</h1>';
            $html .= '<p>' . $item->getText() . '</p>';
            $html .= '</div>';
            $html .= '</div>';
        }
        $html .= '</div>';
        return $html;
    }

    /**
     * This function determines if the stream will appear on the page and has higher priority than standart (deprecated)
     * carousel.
     * Should be changed somehow to be available through DW GUI
     * @return null|string
     */
    private function getStreamByPage(): ?string {
        // For every page about fyziklani and vaf

        if (preg_match('/^rocnik..:fyziklani.*/', $this->pageId)) {
            return 'fof-carousel-cs';
        }

        if (preg_match('/^year..:physicsbrawl.*/', $this->pageId)) {
            return 'fof-carousel-en';
        }

        if (preg_match('/^rocnik..:vaf.*/', $this->pageId)) {
            return 'fof-carousel-cs';
        }

        if (preg_match('/^year..:wap.*/', $this->pageId)) {
            return 'fof-carousel-en';
        }

        // For single pages only
        switch ($this->pageId) {
            case 'start':
                return 'home-carousel-cs';
            case 'en':
                return 'home-carousel-en';
            case 'akce:fyziklani:start':
                return 'fof-carousel-cs';
            case 'events:physicsbrawl:start':
                return 'fof-carousel-en';
            default:
                return null;
        }
    }
}

<?php

namespace FYKOS\dokuwiki\template\Jumbotron;

require_once(dirname(__FILE__) . '/JumbotronData.php');
require_once(dirname(__FILE__) . '/JumbotronGroup.php');
require_once(dirname(__FILE__) . '/JumbotronItem.php');

use FYKOS\dokuwiki\template\NavBar\BootstrapNavBar;

class Jumbotron {

    private string $pageId;

    public function setPageId(string $pageId): self {
        $this->pageId = $pageId;
        return $this;
    }

    private function printSecondMenuContainer(BootstrapNavBar $secondMenu): void {
        echo '<div class="row nav-container hidden-md-down second-nav">';
        $secondMenu->render();
        echo '</div>';
    }

    private function printCarouselContainer(string $stream): void {
        echo '<div class="carousel-container">';
        echo p_render('xhtml', p_get_instructions('{{news-carousel>stream="' . $stream . '"}}'), $info);
        echo '</div>';
    }

    private function printJumbotronContainer(JumbotronItem $item): void {
        echo '<div class="row jumbotron-background" data-background="' . $item->getOuterContainerBackgroundId() . '">';

        if ($item->getHeadline() || $item->getText()) {
            echo '<div class="offset-lg-1 col-lg-8 offset-xl-3 col-xl-5">';
            echo '<div class="jumbotron-inner-container"
                             data-background="' . $item->getInnerContainerBackgroundId() . '">';
            echo '<h1>' . $item->getHeadline() . '</h1>';
            echo '<p>' . $item->getText() . '</p>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }

    public function render(BootstrapNavBar $secondMenu): void {
        $stream = $this->getStreamByPage();
        $jumbotronData = new JumbotronData();
        $item = $jumbotronData->getJumbotronDataByPage($this->pageId)->getRandom();
        if ($stream) {
            echo '<div class="container-fluid header-image jumbotron">';
            $this->printCarouselContainer($stream);
            $this->printSecondMenuContainer($secondMenu);
            echo '</div>';
        } elseif ($item) {
            echo '<div class="container-fluid header-image jumbotron">';
            $this->printJumbotronContainer($item);
            $this->printSecondMenuContainer($secondMenu);
            echo '</div>';
        } else {
            echo '<div class="container-fluid header mb-3">';
            $this->printSecondMenuContainer($secondMenu);
            echo '</div>';
        }
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

<?php

namespace FYKOS\dokuwiki\template\Jumbotron;

class JumbotronItem {

    private string $headline;

    private string $text;

    private string $innerContainerBackgroundId;

    private string $outerContainerBackgroundId;

    public function __construct(string $headline, string $text, string $innerBackground, string $outerBackground) {
        $this->headline = $headline;
        $this->text = $text;
        $this->innerContainerBackgroundId = $innerBackground;
        $this->outerContainerBackgroundId = $outerBackground;
    }

    public function getHeadline(): string {
        return $this->headline;
    }

    public function getText(): string {
        return $this->text;
    }

    public function getInnerContainerBackgroundId(): string {
        return $this->innerContainerBackgroundId;
    }

    public function getOuterContainerBackgroundId(): string {
        return $this->outerContainerBackgroundId;
    }
}

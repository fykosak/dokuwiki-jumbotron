<?php

namespace FYKOS\dokuwiki\template\Jumbotron;
/**
 * Class JumbotronGroup
 * @author Michal Červeňák <miso@fykos.cz>
 */
class JumbotronGroup {

    /** @var JumbotronItem[] */
    private array $items;

    public function __construct(array $items) {
        $this->items = $items;
    }

    private function count(): int {
        return count($this->items);
    }

    public function getRandom(): ?JumbotronItem {
        if ($this->count()) {
            return $this->items[array_rand($this->items)];
        }
        return null;
    }
}

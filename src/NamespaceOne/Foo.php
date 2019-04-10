<?php

namespace PhpArchTest\NamespaceOne;

class Foo {

    public function initializesBar() {
        new Bar();
    }

}

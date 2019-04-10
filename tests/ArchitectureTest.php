<?php

use J6s\PhpArch\Component\Architecture;
use J6s\PhpArch\PhpArch;
use J6s\PhpArch\Validation\MustBeSelfContained;
use PHPUnit\Framework\TestCase;

class ArchitectureTest extends TestCase {

    public function testArchitecture() {
        $architecture = new Architecture();
        $architecture->components([
            'one' => 'NamespaceOne',
            'two' => 'NamespaceTwo'
        ]);
        $architecture->component('one')->mustNotDependOn('two');

        (new PhpArch())
            ->fromDirectory(__DIR__ . '/../src/NamespaceOne')
            ->validate($architecture)
            ->assertHasNoErrors();
    }

}

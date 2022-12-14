<?php

declare(strict_types=1);

namespace SpecialWeb\GremlinDSL\Generator;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpNamespace;

abstract class AbstractGenerator
{
    protected FileWriter $writer;

    /**
     * AbstractGenerator constructor.
     * @param FileWriter $writer
     */
    public function __construct(FileWriter $writer)
    {
        $this->writer = $writer;
    }

    protected function write(PhpFile $file): void
    {
        $this->writer->writeWithComposerPathDetection($file);
    }

    protected function bootstrapFile(): PhpFile
    {
        return (new PhpFile())
            ->addComment('This is an autogenerated file. Changes will be lost on next generation.')
            ->setStrictTypes();
    }

    protected function bootstrapClass(
        string $className,
        string $namespaceName,
        ?string $abstractClass = null,
        ?PhpFile &$file = null,
        ?PhpNamespace &$namespace = null
    ): ClassType {
        if (!$file) {
            $file = $this->bootstrapFile();
        }
        if (!$namespace) {
            $namespace = $file->addNamespace($namespaceName);
        }
        $class = $namespace->addClass($className);

        if ($abstractClass) {
            $namespace->addUse($abstractClass);
            $class->setExtends($abstractClass);
        }

        return $class;
    }

    protected function detectNamespaceForClassName(string $className): string
    {
        return substr($className, 0, strrpos($className, '\\'));
    }
}

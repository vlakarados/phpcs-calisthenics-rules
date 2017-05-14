<?php declare(strict_types=1);

namespace ObjectCalisthenics\Helper\Slevomat;

use Exception;
use Throwable;

/**
 * Mirror to https://github.com/slevomat/coding-standard/blob/master/SlevomatCodingStandard/Helpers/EmptyFileException.php
 */
final class EmptyFileException extends Exception
{
    /**
     * @var string
     */
    private $filename;

    public function __construct(string $filename, Throwable $previous = null)
    {
        parent::__construct(sprintf(
            'File %s is empty',
            $filename
        ), 0, $previous);

        $this->filename = $filename;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }
}

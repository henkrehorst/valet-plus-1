<?php


namespace Valet;


class SystemInformation
{
    const ARM_IDENTIFIER = 'arm';
    const INTEL_IDENTIFIER = 'i386';

    public $cli;

    /**
     * Create a new System Information instance.
     *
     * @param CommandLine $cli
     */
    public function __construct(CommandLine $cli)
    {
        $this->cli = $cli;
    }

    /**
     * Checks system is running on Apple ARM processor.
     *
     * @return bool
     *    True if system is runnig ARM, false if system is running Intel.
     */
    public function isRunningArm()
    {
        return $this->cli->quietly('uname -p') === SELF::ARM_IDENTIFIER;
    }


    /**
     * Checks system is running on a Intel processor.
     *
     * @return bool
     *    True if system is runnig Intel, false if system is running ARM.
     */
    public function isRunningIntel()
    {
        return $this->cli->quietly('uname -p') === SELF::INTEL_IDENTIFIER;
    }
}

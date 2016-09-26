<?php
// класс логера в поток
class StreamLogger extends Logger
{
    public function write()
    {
        return fwrite(fopen('php://stdout', 'w'), $this->text."\n");
    }
}

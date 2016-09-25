<?php
// класс логера в поток
class StreamLogger extends Logger
{
    public function write()
    {
        return fwrite(STDOUT, $this->text."\n");
    }
}

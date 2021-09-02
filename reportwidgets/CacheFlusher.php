<?php
namespace Interweber\CacheFlusher\ReportWidgets;
use Backend\Classes\ReportWidgetBase;

class CacheFlusher extends ReportWidgetBase {
    /**
     * @var string A unique alias to identify this widget.
     */
    protected $defaultAlias = 'cacheFlusher';

    public function render() {
        return $this->makePartial('cacheflusher');
    }

    public function onClearCache() {
        \Cache::flush();
        \Flash::success('Cache wurde zurückgesetzt');
    }
}
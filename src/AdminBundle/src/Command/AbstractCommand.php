<?php

declare(strict_types=1);
/**
 * This file is part of MineAdmin.
 *
 * @link     https://www.mineadmin.com
 * @document https://doc.mineadmin.com
 * @contact  root@imoi.cn
 * @license  https://github.com/mineadmin/MineAdmin/blob/master/LICENSE
 */

namespace Mine\Admin\Bundle\Command;

use Hyperf\Command\Command;

abstract class AbstractCommand extends Command
{
    public function __construct()
    {
        parent::__construct('mine:' . $this->name());
    }

    abstract public function name(): string;
}

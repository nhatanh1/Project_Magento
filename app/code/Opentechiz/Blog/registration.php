<?php
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,  // loại component
    'Opentechiz_Blog', // tên module
    __DIR__ // đường dẫn module. ( trả về đường dẫn thư mục chứa file registration)
);

<?php
// auto-generated by sfViewConfigHandler
// date: 2017/03/29 20:04:08
$context  = $this->getContext();
$response = $context->getResponse();


  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'VFC Control Panel', false, false);
  $response->addMeta('robots', 'nofollow, noindex', false, false);
  $response->addMeta('description', 'vfc control panel', false, false);
  $response->addMeta('keywords', 'none DO NOT PROCEED HERE', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('main', '', array ());
  $response->addStylesheet('themes/office_xp/office_xp.css', '', array ());
  $response->addJavascript('jsdomenu');
  $response->addJavascript('jsdomenubar');



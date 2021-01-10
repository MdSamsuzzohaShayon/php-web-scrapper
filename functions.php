<?php
//https://www.php.net/manual/en/class.domdocument.php
function dom_dump($obj) {
    if ($classname = get_class($obj)) {
        $retval = "Instance of $classname, node list: \n";
        switch (true) {
            case ($obj instanceof DOMDocument):
                $retval .= "XPath: {$obj->getNodePath()}\n".$obj->saveHTML($obj);
                break;
            case ($obj instanceof DOMElement):
                $retval .= "XPath: {$obj->getNodePath()}\n";
                $retval .= "XPath: {$obj->getNodePath()}\n".$obj->ownerDocument->saveHTML($obj);
                break;
            case ($obj instanceof DOMAttr):
                $retval .= "XPath: {$obj->getNodePath()}\n".$obj->ownerDocument->saveHTML($obj);
                //$retval .= $obj->ownerDocument->saveXML($obj);
                break;
            case ($obj instanceof DOMNodeList):
                for ($i = 0; $i < $obj->length; $i++) {
//                    $retval .= "Item #$i, XPath: {$obj->item($i)->getNodePath()}\n" . "{$obj->item($i)->ownerDocument->saveXML($obj->item($i))}\n";
                    $retval .= "Item #$i, XPath: {$obj->item($i)->getNodePath()}\n" . "{$obj->item($i)->ownerDocument->saveHTML($obj->item($i))}\n";
                }
                break;
            default:
                return "Instance of unknown class";
        }
    } else {
        return 'no elements...';
    }
    return htmlspecialchars($retval);
}








function getChildNodeElements( $domNode ){
    $nodes = array();
    for( $i=0; $i < $domNode->childNodes->length; $i++){
        $cn = $domNode->childNodes->item($i);
        if( $cn->nodeType == 1){
            $nodes[] = $cn;
        }
    }
    return $nodes;
}

?>
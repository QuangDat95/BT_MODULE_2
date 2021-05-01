<?php
/*
    Là một cấu trúc dữ liệu danh sách
    các phần tử tham chiếu tuyến tính với nhau
    Phần tử 1 có liên kết trỏ đến phần tử 2
    Kích thước có thể thay đổi
    Truy xuất chậm
    Thêm xóa nhanh

        Singly Linked List
            Một phần tử chỉ chứa một liên kết đến phần tử tiếp sau nó. 
        Circular Singly LinkedList (Danh sách liên kết đơn vòng):
            Phần tử cuối cùng lại tham chiếu đến phần tử đầu tiên, tạo thành một vòng khép kín
        Doubly Linked List ( Danh sách liên kết đôi )
            Một node chứa hai liên kết trỏ đến phần tử đứng trước và sau nó
            Phần tử trước của phần tử đầu tiên là null
            Phần tử sau của phần tử sau là null
        Circular Doubly Linked List ( Danh sách liên kết đôi vòng )
            Phần tử đầu có tham chiếu đến phần tử cuối và phần tử cuối có tham chiếu đến phần tử đầu, như vậy tạo thành một vòng khép kín.
*/


class ListNode
{
    /* Data to hold */
    public $data;
    
    /* Link to next node */
    public $next;
    
    
    /* Node constructor */
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
    
    function readNode()
    {
        return $this->data;
    }
}


class LinkList
{
    /* Link to the first node in the list */
    private $firstNode;
    
    /* Link to the last node in the list */
    private $lastNode;
    
    /* Total nodes in the list */
    private $count;
    
    
    
    /* List constructor */
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function isEmpty()
    {
        return ($this->firstNode == NULL);
    }
    
    public function insertFirst($data)
    {
        $link = new ListNode($data);
        $link->next = $this->firstNode;
        $this->firstNode = &$link;
        
        /* If this is the first node inserted in the list
           then set the lastNode pointer to it.
        */
        if($this->lastNode == NULL)
            $this->lastNode = &$link;
            
        $this->count++;
    }
    
    public function insertLast($data)
    {
        if($this->firstNode != NULL)
        {
            $link = new ListNode($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = &$link;
            $this->count++;
        }
        else
        {
            $this->insertFirst($data);
        }
    }
    
    public function deleteFirstNode()
    {
        $temp = $this->firstNode;
        $this->firstNode = $this->firstNode->next;
        if($this->firstNode != NULL)
            $this->count--;
            
        return $temp;
    }
    
    public function deleteLastNode()
    {
        if($this->firstNode != NULL)
        {
            if($this->firstNode->next == NULL)
            {
                $this->firstNode = NULL;
                $this->count--;
            }
            else
            {
                $previousNode = $this->firstNode;
                $currentNode = $this->firstNode->next;
                
                while($currentNode->next != NULL)
                {
                    $previousNode = $currentNode;
                    $currentNode = $currentNode->next;
                }
                
                $previousNode->next = NULL;
                $this->count--;
            }
        }
    }
    
    public function deleteNode($key)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;

        while($current->data != $key)
        {
            if($current->next == NULL)
                return NULL;
            else
            {
                $previous = $current;
                $current = $current->next;
            }
        }

        if($current == $this->firstNode)
         {
              if($this->count == 1)
               {
                  $this->lastNode = $this->firstNode;
               }
               $this->firstNode = $this->firstNode->next;
        }
        else
        {
            if($this->lastNode == $current)
            {
                 $this->lastNode = $previous;
             }
            $previous->next = $current->next;
        }
        $this->count--;  
    }
    
    public function find($key)
    {
        $current = $this->firstNode;
        while($current->data != $key)
        {
            if($current->next == NULL)
                return null;
            else
                $current = $current->next;
        }
        return $current;
    }
    
    public function readNode($nodePos)
    {
        if($nodePos <= $this->count)
        {
            $current = $this->firstNode;
            $pos = 1;
            while($pos != $nodePos)
            {
                if($current->next == NULL)
                    return null;
                else
                    $current = $current->next;
                    
                $pos++;
            }
            return $current->data;
        }
        else
            return NULL;
    }
    
    public function totalNodes()
    {
        return $this->count;
    }
    
    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        
        while($current != NULL)
        {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
    
    public function reverseList()
    {
        if($this->firstNode != NULL)
        {
            if($this->firstNode->next != NULL)
            {
                $current = $this->firstNode;
                $new = NULL;
                
                while ($current != NULL)
                {
                    $temp = $current->next;
                    $current->next = $new;
                    $new = $current;
                    $current = $temp;
                }
                $this->firstNode = $new;
            }
        }
    }
}
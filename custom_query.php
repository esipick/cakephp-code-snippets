$this->loadModel('Article');
$articles = $this->Article->find('all', [
    'conditions' => [
        'OR' => [
            'published' => true,
            'author_id' => 1
        ]
    ],
    'contain' => ['Author']
]);

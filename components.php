// In your controller
public $components = ['Paginator', 'RequestHandler'];

public function index()
{
    $this->Paginator->settings = [
        'limit' => 10,
        'order' => ['Article.created' => 'desc']
    ];

    $articles = $this->Paginator->paginate($this->Article->find());
    $this->set(compact('articles'));
}

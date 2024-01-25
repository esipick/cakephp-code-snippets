// In your controller
public function upload()
{
    if ($this->request->is('post')) {
        $file = $this->request->getData('file');
        $uploadPath = WWW_ROOT . 'uploads' . DS;
        
        if ($this->Upload->upload($file, $uploadPath)) {
            // File uploaded successfully
        } else {
            // File upload failed
        }
    }
}

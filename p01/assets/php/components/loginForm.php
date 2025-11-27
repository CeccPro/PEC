class LoginForm {
    public function render(array $text = [], array $props = []): string {
        $form = <<< HTML
        <form method="POST" action="/login">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
        HTML;
        return $form;
    }
}
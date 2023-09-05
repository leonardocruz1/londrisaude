import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;

public class TelaInicialApp extends Application {

    public static void main(String[] args) {
        launch(args);
    }

    @Override
    public void start(Stage primaryStage) {
        primaryStage.setTitle("Tela Inicial");

        VBox root = new VBox(20);
        root.setAlignment(Pos.CENTER);

        Button esqueciSenhaButton = new Button("Esqueci minha senha");
        esqueciSenhaButton.setOnAction(e -> {
            System.out.println("Botão 'Esqueci minha senha' clicado.");
        });

        Button naoPossuoCadastroButton = new Button("Não possuo cadastro");
        naoPossuoCadastroButton.setOnAction(e -> {
            System.out.println("Botão 'Não possuo cadastro' clicado.");
        });

        root.getChildren().addAll(esqueciSenhaButton, naoPossuoCadastroButton);

        Scene scene = new Scene(root, 300, 200);
        primaryStage.setScene(scene);
        primaryStage.show();
    }
}

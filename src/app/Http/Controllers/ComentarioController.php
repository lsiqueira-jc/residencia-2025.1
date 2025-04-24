<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{

    public function buscar()
    {
        $comentarios = Comentario::where('status', 'aprovado')->get();

        return response()->json([
            'data' => $comentarios
        ], 200);

    }

    public function comentar(Request $request){
        $comentario = $request->input('comentario');// recebendo os dados do front-end
        // $post_id = $request->input('post_id');//??????? recebendo os dados do front-end

        //Enviar para aprovação da IA{}
        $statusDoComentario = $this->aprovarComentario($comentario);

        //Salvando os dados no banco de dados
        $novoComentario = new Comentario();
        $novoComentario->comentario = $comentario;
        $novoComentario->status = $statusDoComentario; // Pendente, Aprovado, Rejeitado
        $novoComentario->save();

        // Exemplo de resposta:
        return response()->json([
            'message' => 'Comentários salvo com sucesso!',
            'data' => [$novoComentario]
        ], 201);

    }

        //Rotas Privadas

        private function aprovarComentario($comentario)
        {
            // Aqui você pode implementar a lógica para aprovar o comentário
            return "aprovado"; // ou "rejeitado" dependendo da lógica de aprovação

        }

    // public function deletar($id)
    // {
    //     $comentario = Comentario::find($id);

    //     if (!$comentario) {
    //         return response()->json([
    //             'message' => 'Comentário não encontrado!'
    //         ], 404);
    //     }

    //     $comentario->delete();

    //     return response()->json([
    //         'message' => 'Comentário deletado com sucesso!'
    //     ], 200);
    // }

    // public function buscarPorId($id)
    // {
    //     $comentario = Comentario::find($id);

    //     if (!$comentario) {
    //         return response()->json([
    //             'message' => 'Comentário não encontrado!'
    //         ], 404);
    //     }

    //     return response()->json([
    //         'data' => $comentario
    //     ], 200);
    // }

    // public function atualizar(Request $request, $id)
    // {
    //     $comentario = Comentario::find($id);

    //     if (!$comentario) {
    //         return response()->json([
    //             'message' => 'Comentário não encontrado!'
    //         ], 404);
    //     }

    //     $comentario->comentario = $request->input('comentario');
    //     $comentario->save();

    //     return response()->json([
    //         'message' => 'Comentário atualizado com sucesso!',
    //         'data' => $comentario
    //     ], 200);
    // }




}

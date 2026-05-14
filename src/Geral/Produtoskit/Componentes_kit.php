<?php

namespace OmieLib\Geral\Produtoskit;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Produtoskit\Request\AlterarCompKitRequest;
use OmieLib\Geral\Produtoskit\Response\AlterarCompKitResponse;

/**
 * Lista de Componentes do KIT.
 *
 * @pw_element string $acao_componente Indica se irá Incluir/Alterar ou Excluir o componente.<BR><BR>Pode ser:<BR><BR>"A" - Alterar o componente.<BR>"E" - Excluir o componente<BR>"I" - Incluir o componente
 * @pw_element integer $codigo_componente Identificação do componente do KIT, deve ser utilizado para Alterar e Excluir o componente.<BR><BR>Não deve ser informado na inclusão.<BR><BR>Esse código não aparece na tela do Omie.<BR><BR>Preenchimento obrigatório na Alteração e Exclusão.
 * @pw_element integer $codigo_produto_componente ID do produto que deseja Incluir ou Alterar no KIT.<BR><BR>(utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno gerado pelo Omie ao cadastrar o produto.<BR><BR>Preenchimento obrigatório na Inclusão.
 * @pw_element decimal $quantidade_componente Quantidade do componente.<BR><BR>Preenchimento obrigatório na inclusão.
 * @pw_element decimal $valor_unitario_componente Valor unitário do componente.<BR><BR>Preenchimento obrigatório na inclusão.
 * @pw_element integer $codigo_local_estoque ID do local de estoque<BR>Caso não seja informado será atribuido o local de estoque padrão.<BR><BR>Utilize a tag 'codigo_local_estoque' do método 'ListarLocaisEstoque' da API:<BR>https://app.omie.com.br/api/v1/estoque/local/<BR>para obter essa informação.<BR><BR>Preenchimento opcional.
 * @pw_element string $obs_componente Observações do Componente.
 * @pw_complex componentes_kit
 */
class Componentes_kit{
	/**
	 * Indica se irá Incluir/Alterar ou Excluir o componente.<BR><BR>Pode ser:<BR><BR>"A" - Alterar o componente.<BR>"E" - Excluir o componente<BR>"I" - Incluir o componente
	 *
	 * @var string
	 */
	public string $acao_componente;
	/**
	 * Identificação do componente do KIT, deve ser utilizado para Alterar e Excluir o componente.<BR><BR>Não deve ser informado na inclusão.<BR><BR>Esse código não aparece na tela do Omie.<BR><BR>Preenchimento obrigatório na Alteração e Exclusão.
	 *
	 * @var integer
	 */
	public int $codigo_componente;
	/**
	 * ID do produto que deseja Incluir ou Alterar no KIT.<BR><BR>(utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno gerado pelo Omie ao cadastrar o produto.<BR><BR>Preenchimento obrigatório na Inclusão.
	 *
	 * @var integer
	 */
	public int $codigo_produto_componente;
	/**
	 * Quantidade do componente.<BR><BR>Preenchimento obrigatório na inclusão.
	 *
	 * @var decimal
	 */
	public float $quantidade_componente;
	/**
	 * Valor unitário do componente.<BR><BR>Preenchimento obrigatório na inclusão.
	 *
	 * @var decimal
	 */
	public float $valor_unitario_componente;
	/**
	 * ID do local de estoque<BR>Caso não seja informado será atribuido o local de estoque padrão.<BR><BR>Utilize a tag 'codigo_local_estoque' do método 'ListarLocaisEstoque' da API:<BR>https://app.omie.com.br/api/v1/estoque/local/<BR>para obter essa informação.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Observações do Componente.
	 *
	 * @var string
	 */
	public string $obs_componente;
}

<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Status de retorno do cadastro de produtos
 *
 * @pw_element integer $codigo_produto Código do produto.<BR>É o ID do produto e será utilizado apenas nas APIs como chave principal para localizar um produto.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto. <BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>Esse campo não deve ser informado na inclusão de produtos. <BR><BR>Essa informação não será exibida nas telas do Omie.
 * @pw_element string $codigo_produto_integracao Código de integração do produto.<BR>É o código do produto no aplicativo que você está integrando ao Omie.<BR>É utilizado basicamente na Inclusão de Produtos via API, para evitar duplicidade de cadastros.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto. <BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>O preenchimento desse campo é obrigatório na inclusão de produtos. <BR><BR>Essa informação não será exibida nas telas do Omie.
 * @pw_element string $codigo_status Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $descricao_status Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex produto_servico_status
 */
class Produto_servico_status{
	/**
	 * Código do produto.<BR>É o ID do produto e será utilizado apenas nas APIs como chave principal para localizar um produto.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto. <BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>Esse campo não deve ser informado na inclusão de produtos. <BR><BR>Essa informação não será exibida nas telas do Omie.
	 *
	 * @var integer
	 */
	public int $codigo_produto;
	/**
	 * Código de integração do produto.<BR>É o código do produto no aplicativo que você está integrando ao Omie.<BR>É utilizado basicamente na Inclusão de Produtos via API, para evitar duplicidade de cadastros.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto. <BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>O preenchimento desse campo é obrigatório na inclusão de produtos. <BR><BR>Essa informação não será exibida nas telas do Omie.
	 *
	 * @var string
	 */
	public string $codigo_produto_integracao;
	/**
	 * Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
	 *
	 * @var string
	 */
	public string $codigo_status;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
	 *
	 * @var string
	 */
	public string $descricao_status;
}

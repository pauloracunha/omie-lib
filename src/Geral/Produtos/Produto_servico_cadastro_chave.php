<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Pesquisa de produtos
 *
 * @pw_element integer $codigo_produto Código do produto.<BR>É o ID do produto e será utilizado apenas nas APIs como chave principal para localizar um produto.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto. <BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>Esse campo não deve ser informado na inclusão de produtos. <BR><BR>Essa informação não será exibida nas telas do Omie.
 * @pw_element string $codigo_produto_integracao Código de integração do produto.<BR>É o código do produto no aplicativo que você está integrando ao Omie.<BR>É utilizado basicamente na Inclusão de Produtos via API, para evitar duplicidade de cadastros.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto. <BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>O preenchimento desse campo é obrigatório na inclusão de produtos. <BR><BR>Essa informação não será exibida nas telas do Omie.
 * @pw_element string $codigo Código do Produto.<BR><BR>É um código único que identifica o produto no Omie. Se você tem um código SKU (Stock Keeping Unit = Unidade de Manutenção de Estoque) é aqui que ele deve ser informado, pois é essa informação que será exibida na tela do Omie.<BR><BR>Não recomendamos que ele seja utilizado como chave para integração, pois pode ser modificado pelo usuário a qualquer momento. No lugar deste campo, utilize o ID do produto, que você encontra na tag "codigo_produto".
 * @pw_complex produto_servico_cadastro_chave
 */
class Produto_servico_cadastro_chave{
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
	 * Código do Produto.<BR><BR>É um código único que identifica o produto no Omie. Se você tem um código SKU (Stock Keeping Unit = Unidade de Manutenção de Estoque) é aqui que ele deve ser informado, pois é essa informação que será exibida na tela do Omie.<BR><BR>Não recomendamos que ele seja utilizado como chave para integração, pois pode ser modificado pelo usuário a qualquer momento. No lugar deste campo, utilize o ID do produto, que você encontra na tag "codigo_produto".
	 *
	 * @var string
	 */
	public string $codigo;
}

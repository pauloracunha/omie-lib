<?php

namespace OmieLib\Produtos\Variacao;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Variacao\Request\VariacaoConsultarRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoIncluirRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoListarRequest;
use OmieLib\Produtos\Variacao\Response\VariacaoConsultarResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoIncluirResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoListarResponse;

/**
 * Configuração manual da variação do produto.
 *
 * @pw_element integer $nCodProdAssoc Código do produto a ser associado a essa variação.<BR><BR>Caso informado, não será gerado um novo produto variação e sim, associado a esse produto informado.
 * @pw_element string $cDescrProduto Descrição do produto.<BR>Descrição do nome do produto no Omie.
 * @pw_element string $cCodProduto Código do Produto exibido na tela de Produtos.<BR>Preenchimento Opcional.
 * @pw_element aValoresCaracteristicasArray $aValoresCaracteristicas Informação da característica e valor.
 * @pw_complex aVariacoes
 */
class AVariacoes{
	/**
	 * Código do produto a ser associado a essa variação.<BR><BR>Caso informado, não será gerado um novo produto variação e sim, associado a esse produto informado.
	 *
	 * @var integer
	 */
	public int $nCodProdAssoc;
	/**
	 * Descrição do produto.<BR>Descrição do nome do produto no Omie.
	 *
	 * @var string
	 */
	public string $cDescrProduto;
	/**
	 * Código do Produto exibido na tela de Produtos.<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $cCodProduto;
	/**
	 * Informação da característica e valor.
	 *
	 * @var AValoresCaracteristicas[]
	 */
	public array $aValoresCaracteristicas;
}

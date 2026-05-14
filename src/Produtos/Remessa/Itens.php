<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Informações dos itens que serão devolvidos.
 *
 * @pw_element integer $nIdProd Código do Produto
 * @pw_element integer $nQuant Quantidade do item a ser devolvida.<BR><BR>Preenchimento opcional.<BR><BR>Caso não seja preenchida será feita a devolução integral do produto.
 * @pw_complex itens
 */
class Itens{
	/**
	 * Código do Produto
	 *
	 * @var integer
	 */
	public int $nIdProd;
	/**
	 * Quantidade do item a ser devolvida.<BR><BR>Preenchimento opcional.<BR><BR>Caso não seja preenchida será feita a devolução integral do produto.
	 *
	 * @var integer
	 */
	public int $nQuant;
}

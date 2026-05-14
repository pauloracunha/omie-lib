<?php

namespace OmieLib\Financas\Pesquisartitulos\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pesquisartitulos\ACodCateg;
use OmieLib\Financas\Pesquisartitulos\CabecTitulo;
use OmieLib\Financas\Pesquisartitulos\Departamentos;
use OmieLib\Financas\Pesquisartitulos\Info;
use OmieLib\Financas\Pesquisartitulos\Lancamentos;
use OmieLib\Financas\Pesquisartitulos\PesquisarTitulosJsonClient;
use OmieLib\Financas\Pesquisartitulos\Request\LtLinkBoletoRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtListarExcluidosRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtPesquisarRequest;
use OmieLib\Financas\Pesquisartitulos\Resumo;
use OmieLib\Financas\Pesquisartitulos\TitulosEncontrados;
use OmieLib\Financas\Pesquisartitulos\TitulosExcluidos;

/**
 * Resposta da solicitação do link do boleto de um título.
 *
 * @pw_element integer $nCodTitulo Código do titulo.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntTitulo Código de integração do título.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_element string $cLinkBoleto Link do boleto
 * @pw_complex ltLinkBoletoResponse
 */
class LtLinkBoletoResponse{
	/**
	 * Código do titulo.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodTitulo;
	/**
	 * Código de integração do título.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntTitulo;
	/**
	 * Link do boleto
	 *
	 * @var string
	 */
	public string $cLinkBoleto;
}
